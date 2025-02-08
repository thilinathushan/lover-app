<div>
    <div class="card rounded-4 shadow-sm p-4 ">
        <h5 class="fw-semibold">Recent Activities</h5>
        <ul class="list-group list-group-flush" wire:poll.10s>
            @foreach ($recentActivities as $activity)
                <li class="list-group-item">
                    <strong>{{ $activity->name ?? 'No Name' }}</strong> invited
                    <strong>{{ $activity->partner->partner_name ?? 'No Partner Name' }}</strong> with a
                    heartfelt
                    message:
                    <i>"{{ $activity->partner->special_note ?? 'No Special Note' }}"</i>. The proposal link
                    was opened on
                    <strong class="text-secondary-emphasis">
                        @if (isset($activity->proposal->link_opened_at))
                            {{ \Carbon\Carbon::parse($activity->proposal->link_opened_at)->format('F j, Y \a\t g:i A') }}
                        @else
                            "No proposal Link Opened Timestamp"
                        @endif
                    </strong>,
                    and <strong>{{ $activity->partner->partner_name ?? 'No Partner Name' }}</strong>
                    responded with:
                    <i>"{{ $activity->proposal->custom_message ?? 'No Custom Message' }}"</i>.
                </li>
            @endforeach

        </ul>
    </div>
</div>
