<?php
// One-off script to activate a user by email for local development
require __DIR__ . '/../bootstrap/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Boot the framework
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\User;
use Illuminate\Support\Facades\DB;

$email = isset($argv[1]) ? $argv[1] : 'acer@gmail.com';
if (empty($email)) {
    echo "Usage: php scripts/activate_user.php email@example.com\n";
    exit(1);
}

$user = User::where('email', '=', $email)->first();
if (!$user) {
    echo "User with email $email not found.\n";
    exit(1);
}

// Update status to active (assumed to be 1)
$user->userstatus_id = 1;
$user->save();

echo "Activated user: {$user->email} (id: {$user->id}).\n";

// Also, if there's a request_for_create_college_accounts entry, mark it approved (status 1)
$req = DB::table('request_for_create_college_accounts')->where('email', '=', $email)->first();
if ($req) {
    DB::table('request_for_create_college_accounts')->where('id', $req->id)->update(['status' => 1]);
    echo "Also marked request_for_create_college_accounts id {$req->id} as approved.\n";
}

exit(0);
