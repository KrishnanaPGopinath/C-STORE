<center>

  <section class="w-100 p-4 gradient-custom">
    <style>
      .gradient-custom {
        background: radial-gradient(50% 123.47% at 50% 50%, #00ff94 0%, #720059 100%),
          linear-gradient(121.28deg, #669600 0%, #ff0000 100%),
          radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
        background-blend-mode: screen, color-dodge, overlay, difference, normal;
        margin: 20px 30px 30px 40px;
        height: 500px;
        width: 1000px;
      }
    </style>

    <div class="row d-flex justify-content-center py-5">
      <div class="col-md-7 col-lg-5 col-xl-5">
        <div class="card" style="border-radius: 15px;margin: 50px 300px 300px 400px;">
          <div class="card-body p-4">
            <form method="post" action="/cardpaymentaction" style="background-color:white;height:2600px;width:300px;">
              @csrf
              <table>
                <tr>
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-outline">
                      <td>
                        <label class="form-label" for="typeText" style="margin-left: 0px;">Card Number</label>
                      </td>
                      <td>
                        <input type="text" id="cardnumber" name="cardnumber" class="form-control form-control-lg" siez="17" placeholder="1234 5678 9012 3457" minlength="19" maxlength="19">
                      </td>
                      <br>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="height:12px;width:19px;"></div>
                        <div class="form-notch-middle" style="width: 84.8px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>

                  </div>
                </tr><br><br><br><br><br>
                <tr>
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-outline">
                      <td>
                        <label class="form-label" for="typeName" style="margin-left: 0px;">Cardholder's Name</label>
                      </td>
                      <td>
                        <input type="text" id="name" name="name" class="form-control form-control-lg" siez="17" placeholder="Cardholder's Name">
                      </td>
                      <br>
                      <div class="form-notch">
                        <div class="form-notch-leading" style="height:12px;width:19px;"></div>
                        <div class="form-notch-middle" style="width: 117.6px;"></div>
                        <div class="form-notch-trailing"></div>
                      </div>
                    </div>
                  </div>
                </tr>
                <div class="d-flex justify-content-between align-items-center pb-2">
                  <div class="form-outline">
                    <td>
                      <label class="form-label" for="typeExp" style="margin-left: 0px;">Expiration</label>
                    </td>
                    <td>
                      <input type="text" id="exp" name="exp" class="form-control form-control-lg" placeholder="MM/YYYY" size="7" minlength="7" maxlength="7">
                    </td>
                    <div class="form-notch">
                      <div class="form-notch-leading" style="height:12px;width:19px;"></div>
                      <div class="form-notch-middle" style="width: 64.8px;"></div>
                      <div class="form-notch-trailing"></div>
                    </div>
                  </div>
                  <tr>
                    <div class="form-outline">
                      <td>
                        <label class="form-label" for="typeText2" style="margin-left: 0px;">Cvv</label>
                      </td>
                      <td>
                        <input type="password" id="cvv" name="cvv" class="form-control form-control-lg" placeholder="●●●" size="1" minlength="3" maxlength="3">
                      </td>
                  </tr>

                  <tr>
                    <td>
                      @foreach($result as $value)
                      <input type="text" class="form-control" name="totalamount" value="TotalAmount:{{$value->totalamount}}" style="height:20px; width:129px;background-color:blue;color:white;">
                      @endforeach
                    </td>
                  </tr>

                  <tr>
                    <div class="form-notch">
                      <div class="form-notch-leading" style="height:12px;width:19px;"></div>
                      <div class="form-notch-middle" style="width: 30.4px;"></div>
                      <div class="form-notch-trailing"></div>
                    </div>
                </div>
                <td>
                  <input type="submit" class="btn btn-primary" value="PAY" style="height:20px; width:129px; background-color:blue;color:white;">
                </td>
                </tr>

              </table>
            </form>
          </div>
        </div>
      </div>
  </section>

</center>