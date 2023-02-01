<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Paket;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Categories', Category::count())
                ->color('danger'),

            Card::make('Pakets', Paket::count())
                ->color('warning'),

            Card::make('Bookings', Booking::count())
                ->color('success'),
        ];
    }
}
