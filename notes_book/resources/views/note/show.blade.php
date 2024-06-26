<x-app-layout>
    <div class="note-container  single-note">
       <div class="note-header">
        <h1>Note:{{$notes->created_at}} {{$notes->author}}</h1>
        <div class="note-buttons">
             <a href="{{Route('note.edit', $notes)}}" class="note-cancel-button">Edit</a>
             
             <form action="{{route('note.destroy',$notes)}}" method="POST"  >
                @csrf
                @method('DELETE')
                <button class="note-delete-button">DELETE</button>
             </form>

        </div>
       </div>
         <div class="note">
            <div class="note-body">
                {{$notes->note}}
            </div>
        </div>   
    </div>

    
</x-app-layout>