{{--
  Template Name: Style Guide
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
      <div class="style-container">
            <div>
                <h1>Color Palette</h1>

                <div class="color-swatches">
                    <div class="color-swatch swatch1">
                        Scooter<br>
                        #358698
                    </div>
                    <div class="color-swatch swatch2">
                        Tuna<br>
                        #34344A
                    </div>
                    <div class="color-swatch swatch3">
                        Aqua<br>
                        #00D1FF
                    </div>
                    <div class="color-swatch swatch4">
                        Monza<br>
                        #C10230
                    </div>
                    <div class="color-swatch swatch5">
                        Soace Gray<br>
                        #4B4B4B
                    </div>
                    <div class="color-swatch swatch6">
                        Astral<br>
                        #3771AC
                    </div>
                    <div class="color-swatch swatch7">
                        Submarine<br>
                        #3771AC
                    </div>
                </div>
            </div>
            
            <div>
                <h1>Typography</h1>

                <h1>Heading 1</h1>
                <p class="details">Font: Oswald / Tuna #34344A</p>

                <hr>

                <h2>Heading 2</h2>
                <p class="details">Font: Oswald / Space Gray #4B4B4B</p>

                <hr>

                <h3>Heading 3</h3>
                <p class="details">Font: Oswald / Space Gray #4B4B4B</p>

                <hr>

                <p>Body Text</p>
                <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
                <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

                <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

                <p class="details">Font: Open Sans / Space Gray #4B4B4B</p>
            </div>
            <div class="btn-area">
                <h1>Buttons</h1>

                <p>
                    <button class="btn btn-primary">Primary</button>&nbsp;
                    <button class="btn btn-secondary">Secondary</button>&nbsp;
                    <button class="btn btn-outline-primary">Outline Primary</button>&nbsp; 
                    <button class="btn btn-outline-secondary">Outline Secondary</button>&nbsp; 
                </p>

                <div class="dark-background">
                    <p>
                        <button class="btn btn-primary">Primary</button>&nbsp;
                        <button class="btn btn-secondary">Secondary</button>&nbsp;
                        <button class="btn btn-outline-primary">Outline Primary</button>&nbsp; 
                        <button class="btn btn-outline-secondary">Outline Secondary</button>&nbsp; 
                    </p>
                </div>

                <h2>Button Sizes</h2>
                <p>
                    <button class="btn btn-lg btn-primary">Large</button>&nbsp;
                    <button class="btn btn-primary">Normal</button>&nbsp;
                    <button class="btn btn-sm btn-primary">Small</button>&nbsp; 
                </p>

            </div>
            <div>
                <h1>Form Elements</h1>
                <form>
                    <div class="grid-2">
                        <div class="form-group">
                            <label>First name</label>
                            <input type="text" class="form-control" placeholder="First name" value="Mark" required>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control is-valid" placeholder="Last name" value="Otto" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control is-invalid" placeholder="City" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>State</label>
                            <input type="text" class="form-control is-invalid" placeholder="State" required>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Zip</label>
                            <input type="text" class="form-control is-invalid" placeholder="Zip" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
            <div>
                <div class="dark-background">
                    <h1>Form Elements (Dark)</h1>
                    <form>
                        <div class="grid-2">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control" placeholder="First name" value="Mark" required>
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control is-valid" placeholder="Last name" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control is-invalid" placeholder="City" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control is-invalid" placeholder="State" required>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Zip</label>
                                <input type="text" class="form-control is-invalid" placeholder="Zip" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <h1>Alerts</h1>
                <div class="alert alert-success">Success message goes here.</div>
                <div class="alert alert-danger">Error message goes here.</div>
            </div>
        </div>
    @include('partials.content-page')
  @endwhile
@endsection
