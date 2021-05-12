


<html>
<header>
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</header>
<body>
<h1>Hello, {{ $errors ? $errors : '' }}</h1>

<form action="{{ url('createSubject')  }}" method="post">
    @csrf

    <input type="text" name="title">
    <textarea name="content" id="editor"></textarea>
    <input type="submit" value="envoyer">
</form>

<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<script>
var options = {
  debug: 'info',
  modules: {
    toolbar: '#toolbar'
  },
  placeholder: 'Compose an epic...',
  readOnly: true,
  theme: 'snow'
};
var editor = new Quill('#editor', options);

</script>
</body>
</html>
