<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Product;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WidgetsTypeOverview extends BaseWidget
{
    // protected function getStats(): array
    // {
    //     return [
    //       Stat::make('Categories', Category::query()->where('Description','Category')->count()),
    //       Stat::make('Product', Product::query()->where('Description')->count())

    //     ];
    // }
}
