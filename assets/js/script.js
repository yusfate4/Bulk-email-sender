tinymce.init({
  selector: "textarea#default",
  width: 1000,
  height: 300,
  plugins: [
    "advlist",
    "autolink",
    "link",
    "image",
    "lists",
    "charmap",
    "prewiew",
    "anchor",
    "pagebreak",
    "searchreplace",
    "wordcount",
    "visualblocks",
    "code",
    "fullscreen",
    "insertdatetime",
    "media",
    "table",
    "emoticons",
    "template",
    "codesample",
  ],
  toolbar:
    "template | undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |" +
    "bullist numlist outdent indent | link image | print preview media fullscreen | " +
    "forecolor backcolor emoticons",
  menu: {
    favs: {
      title: "menu",
      items: "code visualaid | searchreplace | emoticons",
    },
  },
  templates: [
    {title: 'Some title 1', description: 'Some desc 1', content: 'My content'},
    {title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
  ],
  menubar: "favs file edit view insert format tools table",
  content_style: "body{font-family:Helvetica,Arial,sans-serif; font-size:16px}",
});
