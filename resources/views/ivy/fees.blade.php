
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">New payment</h3>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('storePayment') }}">
                    
                        <div class="form-group">
                          <label for="student_number">Student </label>
                          <select name="student_number"  class="form-control">
                              <option selected disabled> Select your student</option>
                                @foreach ($students as $item)
                          <option value="{{ $item->student_number }}"> {{ $item->full_name }} <small> ( {{ $item->student_number }} ) </option>
                                @endforeach
                            </select>
                         
                        </div> <div class="form-group">
                            <label for="date_of-payment">Date of Payment</label>
                            <input type="date" class="form-control" name="date_of_payment">
                            
                          </div>
                          <div class="form-group">
                            <label for="amount">Amount Paid</label>
                            <input type="number" name="amount" class="form-control">
                          
                          </div>
                        <button type="submit" class="btn btn-dark">Add</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
