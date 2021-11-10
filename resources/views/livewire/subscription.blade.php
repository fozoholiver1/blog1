
<div class="footer-newsletter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4>Our Newsletter</h4>
                <p>Subscribe to our news letter to get update on our activities</p>
            </div>
            <div class="col-lg-6">
                <form  wire:submit.prevent="submit">
                    <input type="email"  wire:model="email" >
                    @error('email') <span class="error">{{ $message }}</span> @enderror

                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
