@extends('layouts.app')

@section('content')
<div class="container" style="background-color: bisque">
    <h1 style="font-family: 'Times New Roman', Times, serif">カレンダー</h1>

    <div class="mb-3">
        <a href="{{ route('calendar.index', ['year' => $firstDay->copy()->subMonth()->year, 'month' => $firstDay->copy()->subMonth()->month]) }}" class="btn btn-primary">前の月</a>
        <span>{{ $firstDay->format('Y年m月') }}</span>
        <a href="{{ route('calendar.index', ['year' => $firstDay->copy()->addMonth()->year, 'month' => $firstDay->copy()->addMonth()->month]) }}" class="btn btn-primary">次の月</a>
    </div>

    <!-- 予定追加フォーム -->
    <form action="{{ route('calendar.addEvent') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="date" class="form-label">日付</label>
            <input type="date" id="date" name="date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="event" class="form-label">予定</label>
            
            <input type="text" id="event" name="event" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">予定を追加</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                @foreach (['月', '火', '水', '木', '金', '土', '日'] as $day)
                    <th>{{ $day }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @php
                // カレンダーの初日を月曜日に設定
                $startOfCalendar = $firstDay->copy()->startOfMonth()->startOfWeek(\Carbon\Carbon::MONDAY);
            @endphp

            @for ($week = 0; $week < 6; $week++)
                <tr>
                    @for ($dayOfWeek = 0; $dayOfWeek < 7; $dayOfWeek++)
                        @php
                            $currentDate = $startOfCalendar->copy()->addDays($week * 7 + $dayOfWeek);
                        @endphp
                        <td>
                            @if ($currentDate->month == $firstDay->month)
    {{ $currentDate->day}}
    @if (isset($events[$currentDate->toDateString()]))
        <br>
        <small class="text-danger">{{ $events[$currentDate->toDateString()] }}</small>
        <form action="{{ route('calendar.deleteEvent') }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <input type="hidden" name="date" value="{{ $currentDate->toDateString() }}">
            <input type="hidden" name="event" value="{{ $events[$currentDate->toDateString()] }}">
            <button type="submit" class="btn btn-danger btn-sm">削除</button>
        </form>
    @endif
@endif

                        </td>
                    @endfor
                </tr>
            @endfor
        </tbody>
    </table>
</div>
@endsection
