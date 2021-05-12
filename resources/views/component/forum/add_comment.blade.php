<section class="space-t--sm" id="pledge">
    <header class="panel-hero">

        <div class="panel-hero__action | pt-0">
            <div class="form-block">
                <!--  Content  - Modal -->
                <content_modal :display-on-load="false">
                    <!-- Trigger -->
                    <template slot="trigger">
                        <button class="btn -light">Ajouter un commentaire</button>
                    </template>

                    <!-- Header -->
                    <header slot="header">
                        <h4 class="header-xl-2 text-green-light | mb-0">Ajouter un commentaire</h4>
                        <!--  <h5 class="header-sm -light">
              Fill out the form
              </h5> -->
                    </header>

                    <!-- MODAL CONTENT -->
                    <article slot="article">
                        <article class="article-copy text-black">

                            <section class="container--md | gutter-md space-b">
                                <form action="{{ url('/addComment')  }}" accept-charset="UTF-8" method="post"><input type="hidden"
                                                                                                            />
                                    @csrf

                                    <div class="donate-form-container">
                                        <div class="standard-form | standard-form-base">

                                            <input value="info" type="hidden" name="recipient" id="recipient" />

                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="name">Email</label>
                                                    <input required="required" class="field" type="text" name="email" id="name" value="{{Auth::user()->email ?? ''}}" />
                                                </div>
                                            </div>

                                            <input type="hidden" value="{{ $subject->id  }}" name="subject_id">

                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="name">Name</label>
                                                    <input required="required" class="field" type="text" value="{{(Auth::user()->first_name?? '') . ' ' . (Auth::user()->last_name ?? '')}}"  name="name" id="name" />
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="role">Content</label>
                                                    <textarea name="response" cols="30" rows="10" required></textarea>
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
