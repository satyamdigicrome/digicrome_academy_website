@extends('admin_layout.app')

@section('title', 'Manage Placements')

@section('content')

<div class="container">
    <h2>Media Presence</h2>

    <div class="row">
       <button class="btn btn-primary" > <a href="{{ route('articalshow') }}"> Add Articals</a></button>

    </div>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    {{-- Add New Entry Form --}}
    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Image:</label>
            <input type="file" name="image" required>
        </div>
        <div>
            <label>Heading:</label>
            <input class="form-control" type="text" name="heading" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea id="content" name="description" required></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
    </form>

    <hr>

    {{-- Data Table --}}
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="padding: 10px; border: 1px solid #ddd;">Image</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $entry)
                <tr>
                    {{-- Image --}}
                    <td style="padding: 10px; border: 1px solid #ddd; text-align: center;">
                        <img src="{{ asset('storage/' . $entry->image) }}" width="80" style="border-radius: 4px;" />
                    </td>
    
                    {{-- Actions --}}
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        {{-- Update Form --}}
                        <form action="{{ route('media.update', $entry->id) }}" method="POST" enctype="multipart/form-data" style="margin-bottom: 10px;">
                            @csrf
    
                            <div style="margin-bottom: 5px;">
                                <label style="font-size: 12px;">Change Image:</label><br>
                                <input type="file" name="image" style="margin-top: 5px;">
                            </div>
    
                            <div style="margin-bottom: 5px;">
                                <label style="font-size: 12px;">Heading:</label><br>
                                <input class="form-control" type="text" name="heading" value="{{ $entry->heading }}" required style="width: 100%; padding: 5px;">
                            </div>
    
                            <div style="margin-bottom: 5px;">
                                <label style="font-size: 12px;">Description:</label><br>
                                <textarea id="content" name="description" required style="width: 100%; padding: 5px;" rows="3">{{ $entry->description }}</textarea>
                            </div>
    
                            <button type="submit" style="background-color: #4CAF50; color: white; padding: 6px 12px; border: none; border-radius: 3px; cursor: pointer;">Update</button>
                        </form>
    
                        {{-- Delete Button --}}
                        <form action="{{ route('media.delete', $entry->id) }}" method="GET" onsubmit="return confirm('Are you sure you want to delete this entry?');">
                            <button type="submit" style="background-color: #f44336; color: white; padding: 6px 12px; border: none; border-radius: 3px; cursor: pointer;">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>


@endsection