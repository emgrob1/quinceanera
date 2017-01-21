  

<h2>Generals</h2>
{{ form('forms/selectGenerals', 'method': 'post') }}

Select Army:

Name:
{{ form.render("names") }}

{{ form.render("army_names") }}
{{ end_form()}}

{{ post.general }}