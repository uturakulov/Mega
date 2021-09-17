<?php

namespace App\Exports;

use App\Order;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class OrdersExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */

    use Exportable;

    public function __construct($begin, $end)
    {
        $this->begin = $begin;
        $this->end = $end;
    }


    public function collection()
    {
        return Order::where('created_at', '>=', $this->begin)->where('created_at', '<=', $this->end)->with('user')->get();
    }

    public function map($code): array
    {
        return [
            $code->id,
            $code->user->fio ?? 'Не указано',
            $code->type ?? 'Не указано',
            $code->firm ?? 'Не указано',
            $code->brend ?? 'Не указано',
            $code->budjet ?? 'Не указано',
            $code->tipRek ?? 'Не указано',
            $code->status ?? 'Не указано',
            $code->created_at,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Пользователь',
            'Тип',
            'Фирма',
            'Бренд',
            'Бюджет',
            'Тип рекламы',
            'Статус',
            'Время',
        ];
    }
}
