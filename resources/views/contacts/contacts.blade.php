<x-layout>
    <h1>Contact us with the form.</h1>
    <x-success/>
    <x-error/>
      
      
    <form action="{{route('contact.submit')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input name="name" type="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <input name="message" type="text" class="form-control" id="message" placeholder="Write your message here.">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


</x-layout>