  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      
      
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> 
              <a style="color: #252f40;" href="" class="font-weight-bold ml-1" target="_blank">EnthCliff</a>
              
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
