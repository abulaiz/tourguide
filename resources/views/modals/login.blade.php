  <div class="modal fade text-left" id="login" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Login</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input placeholder="Your Email" type="text" name="email" class="form-control" required autofocus>
                    </div>                    
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" required placeholder="Your Password" name="password" class="form-control"></input>
                    </div>
                </div>   
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" class="btn primary-btn" value="Login">
                </div>
            </form>
        </div>
    </div>
</div>