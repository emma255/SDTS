
      <div class="col-sm-2 well">
      <p>{{ Auth::user()->name }}</p>
          <table class="table-responsive table table-bordered ">
           <tr><td><a href="index">Home</a></td></tr>
           <tr><td><a href="shopping">Add shopping expenses</a></td></tr>
          <tr><td><a href="routes">Add trips expenses</a></td></tr>
              <tr><td><a href="shopping_made">shopping made</a></td></tr>
              <tr><td><a href="routes_made">routes made</a></td></tr>
              <tr><td><a href="payslip">upload payslip</a></td></tr>
              <tr><td>&nbsp;</td></tr>
              <tr>
                <td>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                  </form>
                </td> 
              </tr>
          </table>
      </div>