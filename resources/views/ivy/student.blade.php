
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">New student</h3>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('storeStudent') }}">
                    
                        <div class="form-group">
                          <label for="full_name">Full Name</label>
                          <input type="text" class="form-control" name="full_name">
                          
                        </div> <div class="form-group">
                            <label for="date_of-birth">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth">
                            
                          </div>
                          <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" class="form-control"></textarea>
                            
                          </div>
                        <button type="submit" class="btn btn-dark">Add </button>
                      </form>
                </div>
            </div>
        </div>
    </div>
