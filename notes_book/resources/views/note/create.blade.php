<x-app-layout>
     <div class="note-container  single-note">
          <h1>Create Note</h1>
          <form action="{{route('note.store')}}"  method="Post"  class="note">
          @csrf
               <textarea name="note" id="" cols="30" rows="10" class="note-body" placeholder="enter your notes here"></textarea>
          <div class="note-buttons">
               <a href="{{route('note.index')}}" class="note-cancel-button">Cancel</a>
               <button class="note-submit-button">Submit</button>
          </div>
          
          </form>
     </div>
</x-app-layout>
                    