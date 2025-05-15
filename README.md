# School Management - Laravel + Filament - Full Source Code


school management.

## Modules

- [x] user , roles (admin, teacher, role)
- [x] subjects
- [x] time table
- [x] exam
- [x] marks


## Bash

```bash
php artisan make:model Subject -mcs
php artisan make:model TimeTable -mcs
php artisan make:model Exam -mcs
php artisan make:model Mark -mcs
```


Filament Resource တွေ ထည့်ေပးပြီးရင် ပြီးပြီ။

Admin Panel တစ်ခုရမယ်။


## Resource Collection

```bash
php artisan make:filament-resource User
php artisan make:filament-resource Subject
php artisan make:filament-resource TimeTable
php artisan make:filament-resource Exam
php artisan make:filament-resource Mark
```



php artisan make:filament-widget SchoolOverview --stats-overview