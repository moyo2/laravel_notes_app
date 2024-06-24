<x-layout>
    <div class="note-container  single-note">
       <div class="note-header">
        <h1>Note:{{$notes->created_at}} {{$notes->author}}</h1>
        <div class="note-buttons">
             <a href="{{route('note.index')}}" class="note-cancel-button">Back</a>
             <button class="note-submit-button">Submit</button>
        </div>
       </div>
         <div class="note">
            <div class="note-body">
                {{$notes->note}}
            </div>
        </div>   
    </div>

    
</x-layout>