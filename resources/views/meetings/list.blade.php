

@forelse($meetings as $meeting)
  @include('meetings.card')
  @empty
  <p>ミーティングがありません</p>
@endforelse