<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{route('contactUs.submit')}}" method="POST">
                    @csrf
                    
                    <div class="col-12 mb-1">
                        <label for="userName" class="form-label">Nome Utente:</label>
                        <input type="text" id="userName" name="userName" class="form-control">
                    </div>
                    <div class="col-12 mb-1">
                        <label for="email"  class="form-label">Email:</label>
                        <input type="text" id="email" name="email" class="form-control">
                    </div>
                    <div class="col-12 mb-1">
                        <label for="message" class="form-label">Messaggi:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Invia</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>