<section class="space-t--sm" id="pledge">
    <header class="panel-hero bg-green-darkest">
        <h2 class="header-lg | mb-4">Contact</h2>
        <div class="panel-hero__descr | paragraphs  container--xs">
            <p>Pret a rejoindre l'Association des Elites du sud ?</p>
        </div>
        <div class="panel-hero__action | pt-8">
            <div class="form-block">
                <!--  Content  - Modal -->
                <content_modal :display-on-load="false">
                    <!-- Trigger -->
                    <template slot="trigger">
                        <button class="btn -light">Nous contacter</button>
                    </template>

                    <!-- Header -->
                    <header slot="header">
                        <h4 class="header-xl-2 text-green-light | mb-0">Rejoindre Elat Bobenyañ</h4>
                        <!--  <h5 class="header-sm -light">
              Fill out the form
              </h5> -->
                    </header>

                    <!-- MODAL CONTENT -->
                    <article slot="article">
                        <article class="article-copy text-black">
                            <section class="container--md | gutter-md space-b">
                                <form action="{{route('create.contact')}}" accept-charset="UTF-8" method="POST" id="form_contact">
                                    @csrf
                                    <div class="donate-form-container">
                                        <div class="standard-form | standard-form-base">

                                            <input value="info" type="hidden" name="recipient" id="recipient" />

                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="name">Name</label>
                                                    <input required="required" class="field" type="text" name="name" id="name" maxlength="120" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="email">Email</label>
                                                    <input required="required" class="field" type="email" name="email" id="email" maxlength="140" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="company_name">Company Name</label>
                                                    <input required="required" class="field" type="text" name="company"
                                                           id="company_name" maxlength="100" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="phone_number">Phone Number</label>
                                                    <input class="field" type="tel" name="phone" id="phone_number" required="required" maxlength="20"/>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="field-group">
                                                    <input type="submit" name="commit" value="Send Request" class="btn -light -full -solid"
                                                           data-disable-with="Send Request" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>

                        </article>
                    </article>
                </content_modal>
            </div>

        </div>

    </header>

</section>
@section('javascript')
    <input type="hidden" id="assetUrl" value="{{asset('')}}"/>
    <script type="application/javascript" src="{{asset('assets/notifier.js')}}"></script>
    <script>
        document.addEventListener("submit", (e) =>{
            var values = $('#form_contact').serialize();
            e.preventDefault();
            $.ajax({
                method: 'POST',
                url: $('#form_contact').attr('action'),
                data: values
            }).done((msg)=>{
                var response = JSON.parse(msg);
                Notifier.show(response.msg, response.state, ()=>{response.state == 'success' ? location.reload() : ''}, 1500);
            });
        });
    </script>
@endsection
