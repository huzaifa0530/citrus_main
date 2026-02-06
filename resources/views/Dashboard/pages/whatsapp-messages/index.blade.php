@extends('layouts.app')

@section('title', 'WhatsApp Messages')

@section('content')

<div class="page-header">
    <div class="page-block">
        <h5>WhatsApp Message History</h5>
        <span class="text-muted">All messages sent via WhatsApp</span>
    </div>
</div>

<div class="card">
    <div class="card-block table-border-style">
        <table class="table table-striped table-hover datatable nowrap">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Mobile</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Sent At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($messages as $index => $msg)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $msg->modelProfile->name ?? 'N/A' }}</td>
                        <td>{{ $msg->mobile_no }}</td>
                        <td style="max-width:300px">
                            {{ $msg->message }}
                        </td>
                        <td>
                            <span class="badge badge-success">
                                {{ ucfirst($msg->status) }}
                            </span>
                        </td>
                        <td>{{ $msg->created_at->format('d M Y h:i A') }}</td>
                        <td>
                            <form action="{{ route('whatsapp.messages.sendAgain', $msg->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-primary">
                                    <i class="feather icon-send"></i> Send Again
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection
