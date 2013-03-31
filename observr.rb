#!/usr/bin/env observr

watch( 'scss/(.*)\.scss' )  {|md| cmd = "sass --style compressed #{md[0]} > css/#{md[1]}.css"; puts cmd; system(cmd) }

