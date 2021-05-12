<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<section class="space-t--sm" id="pledge">
    <header class="panel-hero">

        <div class="panel-hero__action | pt-0">
            <div class="form-block">

                    <!-- Header -->
                    <header slot="header">
                        <!--  <h5 class="header-sm -light">
              Fill out the form
              </h5> -->
                    </header>

                    <!-- MODAL CONTENT -->
                    <article slot="article">
                        <article class="article-copy text-black">

                            <section class="container--md | gutter-md space-b">
                                <form action="{{ url('/createSubject')  }}" accept-charset="UTF-8" method="post" id="addSubjectButtonForm">
                                    <input type="hidden"
                                                                                                            />
                                    @csrf

                                    <div class="donate-form-container">
                                        <div class="standard-form | standard-form-base">

                                            <input value="info" type="hidden" name="recipient" id="recipient" />

                                            <div class="form-group">
                                                <div class="field-group">
                                                    <label class="standard-label" for="name">Title</label>
                                                    <input required="required" class="field" type="text" name="title" id="name" />
                                                </div>
                                            </div>



                                            <div class="form-group m-b-5">
                                                <div class="field-group">
                                                    <div id="editorContainerr">

                                                    </div>
                                                </div>
                                            </div>

                                           <div class="form-group ">
                                                <div class="field-group">
                                                    <input type="submit" name="commit" value="Send Request" class="btn -light -full -solid"
                                                           data-disable-with="Send Request"  />
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </form>
                            </section>

                        </article>
                    </article>
            </div>

        </div>

    </header>

</section>


