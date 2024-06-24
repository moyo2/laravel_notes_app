<x-layout>
    <div class="note-container  single-note">
         <h1>Edit Your notes</h1>
         <form action="{{route('note.update', $notes)}}"  method="Post"  class="note">
              <textarea name="" id="" cols="30" rows="10" class="note-body" placeholder="enter your notes here"> {{$notes->note}}</textarea>
         <div class="note-buttons">
              <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
              <button class="note-submit-button">Submit</button>
         </div>
         
         </form>
    </div>
</x-layout>