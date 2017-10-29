@section('footer')
<!------------------------
    Footer
  ------------------------->
<footer id="footer">
  <div class="footer-wrapper">
    
    <!-- Links -->
    <div class="footer-top">
      <ul class="footer-ul">
        <li class="footer-li">
          <a class="footer-a" href="{{ url('/about') }}">About</a> |
        </li>
        <li class="footer-li">
          <a class="footer-a" href="{{ url('/help') }}">Help</a>
        </li>
      </ul>
    </div>
    
    <!-- Copyright -->
    <div class="footer-bottom">
      <small class="footer-small">
        Copyright &copy; 2017 Suri.
      </small>
    </div>
    
  </div><!-- footer-wrapper -->
</footer><!-- footer -->
@endsection
