; The Drush Make API version. This should always be 2.
api = 2

; The version of Drupal the profile is built for. Although you can leave this
; as '7.x', it's better to be precise and define the exact version of core your
; distribution works with.
core = 7.50

; It is also necessary to define project type to be core as well
projects[drupal][type] = core

; projects[media_youtube][version] = 1.0-alpha5
; projects[media_youtube][subdir] = media_plugins

; You can even specify patches to be applied to external library code,
; so long as the patches themselves live on Drupal.org.
; libraries[ckeditor][download][type] = get
; libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%203.6.2/ckeditor_3.6.2.tar.gz"
; libraries[ckeditor][destination] = libraries
; libraries[ckeditor][directory_name] = ckeditor
; libraries[ckeditor][patch][] = "http://drupal.org/files/1337004-ckeditor-remove-samples-3.patch"
