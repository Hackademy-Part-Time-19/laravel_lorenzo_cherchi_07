<x-layout>

    <h1>Articoli</h1>
    {{$titolo ?? 'Titolo placeholder'}}
    
  
  
    

      <div class ="container">
        <div class="row">
          @foreach ($articoli as $chiave => $articolo)

            <x-card 

            :titolo="$articolo['title']" 
            :category="$articolo['category']" 
            :description="$articolo['description']" >

            </x-card>
                      
          @endforeach
        </div>
      </div>
    

  </x-layout>
    
