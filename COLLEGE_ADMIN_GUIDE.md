# College Admin Panel - Quick Start Guide

## Available College Accounts

| College | Email | Password | Dashboard URL |
|---------|-------|----------|---------------|
| IIT Delhi | admin@iitd.ac.in | password | http://localhost:8000/college/dashboard/edit/iit-delhi |
| IIT Bombay | admin@iitb.ac.in | password | http://localhost:8000/college/dashboard/edit/iit-bombay |
| NIT Trichy | admin@nitt.edu | password | http://localhost:8000/college/dashboard/edit/nit-trichy |
| BITS Pilani | admin@bits-pilani.ac.in | password | http://localhost:8000/college/dashboard/edit/bits-pilani |
| VIT Vellore | admin@vit.ac.in | password | http://localhost:8000/college/dashboard/edit/vit-vellore |

## How to Access

### Option 1: Direct Login
1. Visit: `http://localhost:8000/student-sign-up`
2. Click "Login" tab
3. Use any college email and password from above
4. You'll be redirected to college dashboard

### Option 2: Direct URL
1. Start server: `php artisan serve`
2. Visit any dashboard URL from table above
3. Login if prompted

## College Dashboard Features

The college admin panel typically includes:
- ✅ College Profile Management
- ✅ Course Management
- ✅ Faculty Management
- ✅ Facilities Management
- ✅ Gallery Management
- ✅ Student Applications
- ✅ Reviews & Ratings
- ✅ Events & Calendar
- ✅ Address Management

## Test College Login

**Quick Test:**
```
Email: admin@iitd.ac.in
Password: password
Dashboard: http://localhost:8000/college/dashboard/edit/iit-delhi
```

## Database Info

- **User Role ID**: 2 (ROLE_COLLEGE)
- **User Status ID**: 1 (Active)
- **Total Colleges**: 5 sample colleges created
- **Courses**: Each college has engineering courses assigned
- **Addresses**: Each college has registered address

## Next Steps

1. Login with any college account
2. Explore dashboard features
3. Update college profile
4. Manage courses and faculty
5. Upload gallery images
6. Review student applications

---

**Status**: ✅ Ready to use
**Server**: Start with `php artisan serve`
**Access**: Use any college credentials above
