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
                        <h4 class="header-xl-2 text-green-light | mb-0">Rejoindre La Flamme de L'espoir</h4>
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
                                                    <label class="standard-label" for="lastname">Noms</label>
                                                    <input required="required" class="field" type="text" name="lastname" id="lastname" maxlength="120" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="firstname">Prenoms</label>
                                                    <input required="required" class="field" type="text" name="firstname" id="firstname" maxlength="120" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="contact">Contact</label>
                                                    <input required="required" class="field" type="text" name="contact" id="contact" maxlength="140" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="field-group group-check">
                                                    <label class="standard-label group-text" for="don">Faire un don</label>
                                                    <input type="radio" name="title" id="don" value="Faire un don" required>
                                                </div>
                                                <div class="field-group group-check">
                                                    <label class="standard-label group-text" for="parrain">Parrainer un enfant</label>
                                                    <input type="radio" name="title" id="parrain" value="Parrainer un enfant">
                                                </div>
                                                <div class="field-group group-check">
                                                    <label class="standard-label group-text" for="member" >Devenir membre</label>
                                                    <input type="radio" name="title" id="member" value="Devenir membre">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="message">Message</label>
                                                    <textarea required="required" class="field" type="text" name="message" id="message" ></textarea>
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
