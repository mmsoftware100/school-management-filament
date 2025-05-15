<?php

namespace App\Filament\Widgets;

use App\Models\Subject;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SchoolOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // Stat::make('Unique views', '192.1k'),
            // Stat::make('Bounce rate', '21%'),
            // Stat::make('Average time on page', '3:12'),
             Stat::make('Admins', User::where('role_id', 1)->count()),
            Stat::make('Teachers', User::where('role_id', 2)->count()),
            Stat::make('Students', User::where('role_id', 3)->count()),
            Stat::make('Subjects', Subject::all()->count()),
        ];
    }
}
