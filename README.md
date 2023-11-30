### Laravel calibre library
A Kindle friendly alternative web interface for [Calibre Ebook Management](https://calibre-ebook.com/).

### The problem
Kindle devices have a rudimentary web browser which cannot handle complex JavaScript. This project hosts files using server rendered pages with no client side scripts. The idea is to deliver a page with barebones html and css to make it possible to view and download books from the library directly from a Kindle device, without having to mess with cables or Amazon's e-mail service.

### Instalation
You'll need to either move your calibre library to "/storage/app/public/calibre_library", or create a symbolic link.