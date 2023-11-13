<x-layout title="Form movies">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="POST" action="{{route('store.movie')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title" >
                    </div>
                    <div class="mb-3">
                        <label for="year" class="form-label">Anno</label>
                        <input name="year" type="number" class="form-control" id="year">
                    </div>
                    <div class="mb-3 ">
                        <label for="text" class="form-label">Descrizione</label>
                        <div>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Scrivi Una Descrizione"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>