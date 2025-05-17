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

composer create-project laravel/laravel project-name


php artisan serve


composer require filament/filament:"^3.3" -W

php artisan filament:install --panels


# db setup

php artisan migrate


php artisan make:model Subject -mcs
php artisan make:model TimeTable -mcs
php artisan make:model Exam -mcs
php artisan make:model Mark -mcs


php artisan db:seed --class=SubjectSeeder
php artisan db:seed --class=TimeTableSeeder
php artisan db:seed --class=ExamSeeder
php artisan db:seed --class=MarkSeeder




# migration , model, seeder , controller 



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


https://github.com/mmsoftware100/school-management-filament


sudo chown -R ubuntu:www-data /var/www/html/mdemy
sudo chmod -R 775 /var/www/html/mdemy


## Next Step

- [ ] API ထုတ်ပ‌ေးရန်။
- [ ] React Frontend ရေးရန်။ for public , for teacher , for student
- 
