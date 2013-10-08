# Require any additional compass plugins here.

# Name of application
app_name = "mistermachine"

# Set this to the root of your project when deployed:
http_path = "/"

# SASS
sass_dir = "scss"

# CSS
css_dir = "../stylesheets"

# Fonts
fonts_dir = "../fonts"

# Javascript
javascripts_dir = "../javascripts"

# Images
images_dir = "../images"

# Compiled images / sprites
# generated_images_dir = "../img/build"

# Determine if we're compiling for a production environment
is_production = (environment == :production) ? true : false

# You can select your preferred output style here (can be overridden via the command line): options: :nested, :expanded, :compact, or :compressed
output_style = ( is_production ) ? :nested : :expanded

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = ( is_production ) ? false : true

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
preferred_syntax = :scss

# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass