#!/usr/bin/env observr

watch( 'scss/(license|normalize|main|colors|genericons)\.scss' )  {|md| cmd = "sass --style compressed scss/main.scss > style.css"; puts cmd; system(cmd) }

