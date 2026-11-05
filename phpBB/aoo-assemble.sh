# make sure download distor exists
if [[ ! -f "phpBB-${1}.zip" ]]; then
    echo "Error: phpBB-${1}.zip does not exist"
    exit 1
fi

# phpBB release
echo phpBB-${1}.zip
rm -rf phpBB3
unzip phpBB-${1}.zip

# create AOO forum reference
echo ref${1}
rm -rf ref${1}
mv phpBB3 ref${1}
cd ref${1}

# language
# update to new language packs manually
# pulled retired and unmaintained from an old reference
mkdir -p language
cp -rp ../catalan_2_2_19/language/ca language/.
cp -rp ../american_english_5_0_0/language/en_us language/.
cp -rp ../french_5_1_1/language/fr language/.
cp -rp ../polish_3_3_19/language/pl language/.
cp -rp ../italian_3_3_19/language/it language/.
cp -rp ../spanish_formal_honorifics_spanish_formal_3_3_16/language/es language/.
cp -rp ../japanese_3_3_19/language/ja language/.
cp -rp ../dutch_casual_honorifics_2_3_10/language/nl language/.
cp -rp ../spanish_casual_honorifics_3_3_16/language/es_x_tu language/.
cp -rp ../aoo-setup/language/hu language/.
cp -rp ../aoo-setup/language/vi language/.
cp -rp ../aoo-setup/language/zh_cmn_hans language/.
cp -rp ../aoo-setup/language/zh_cmn_hant language/.

# language extensions
mkdir -p ext/phpbb/viglink/language
cp -rp ../catalan_2_2_19/ext/phpbb/viglink/language/ca ext/phpbb/viglink/language/.
cp -rp ../american_english_5_0_0/ext/phpbb/viglink/language/en_us ext/phpbb/viglink/language/.
cp -rp ../french_5_1_1/ext/phpbb/viglink/language/fr ext/phpbb/viglink/language/.
cp -rp ../polish_3_3_19/ext/phpbb/viglink/language/pl ext/phpbb/viglink/language/.
cp -rp ../italian_3_3_19/ext/phpbb/viglink/language/it ext/phpbb/viglink/language/.
cp -rp ../spanish_formal_honorifics_spanish_formal_3_3_16/ext/phpbb/viglink/language/es ext/phpbb/viglink/language/.
cp -rp ../japanese_3_3_19/ext/phpbb/viglink/language/ja ext/phpbb/viglink/language/.
cp -rp ../dutch_casual_honorifics_2_3_10/ext/phpbb/viglink/language/nl ext/phpbb/viglink/language/.
cp -rp ../spanish_casual_honorifics_3_3_16/ext/phpbb/viglink/language/es_x_tu ext/phpbb/viglink/language/.
cp -rp ../aoo-setup/ext/phpbb/viglink/language/hu ext/phpbb/viglink/language/.
cp -rp ../aoo-setup/ext/phpbb/viglink/language/vi ext/phpbb/viglink/language/.
cp -rp ../aoo-setup/ext/phpbb/viglink/language/zh_cmn_hans ext/phpbb/viglink/language/.
cp -rp ../aoo-setup/ext/phpbb/viglink/language/zh_cmn_hant ext/phpbb/viglink/language/.

# language styles 
mkdir -p styles/prosilver/theme
cp -rp ../catalan_2_2_19/styles/prosilver/theme/ca styles/prosilver/theme/.
cp -rp ../american_english_5_0_0/styles/prosilver/theme/en_us styles/prosilver/theme/.
cp -rp ../french_5_1_1/styles/prosilver/theme/fr styles/prosilver/theme/.
cp -rp ../polish_3_3_19/styles/prosilver/theme/pl styles/prosilver/theme/.
cp -rp ../italian_3_3_19/styles/prosilver/theme/it styles/prosilver/theme/.
cp -rp ../spanish_formal_honorifics_spanish_formal_3_3_16/styles/prosilver/theme/es styles/prosilver/theme/.
cp -rp ../japanese_3_3_19/styles/prosilver/theme/ja styles/prosilver/theme/.
cp -rp ../dutch_casual_honorifics_2_3_10/styles/prosilver/theme/nl styles/prosilver/theme/.
cp -rp ../spanish_casual_honorifics_3_3_16/styles/prosilver/theme/es_x_tu styles/prosilver/theme/.
cp -rp ../aoo-setup/styles/prosilver/theme/hu styles/prosilver/theme/.
cp -rp ../aoo-setup/styles/prosilver/theme/vi styles/prosilver/theme/.
cp -rp ../aoo-setup/styles/prosilver/theme/zh_cmn_hans styles/prosilver/theme/.
cp -rp ../aoo-setup/styles/prosilver/theme/zh_cmn_hant styles/prosilver/theme/.
cp -rp ../aoo-setup/styles/prosilver/theme/images styles/prosilver/theme/.
cp -rp ../aoo-setup/styles/prosilver/imageset styles/prosilver/.


# Copy images from prior deployments
# images
cp -rp ../aoo-setup/logo_forum.png .
cp -rp ../aoo-setup/AOO-download.png .
cp -rp ../aoo-setup/images/*.png images/.
cp -rp ../aoo-setup/images/OOo_Icons images/.
cp -rp ../aoo-setup/images/avatars/gallery/Butterflies images/avatars/gallery/.
cp -rp ../aoo-setup/images/avatars/gallery/Countries images/avatars/gallery/.
cp -rp ../aoo-setup/images/avatars/gallery/Organisations images/avatars/gallery/.
cp -rp ../aoo-setup/images/avatars/gallery/Simpons images/avatars/gallery/.
cp -rp ../aoo-setup/images/avatars/gallery/Tux images/avatars/gallery/.
cp  ../aoo-setup/images/icons/misc/resolu.gif images/icons/misc/.
cp  ../aoo-setup/images/icons/misc/resolu_blue.gif images/icons/misc/.
cp  ../aoo-setup/images/icons/misc/resolu_red.gif images/icons/misc/.
cp  ../aoo-setup/images/icons/misc/spacer.gif images/icons/misc/.
cp  -rp ../aoo-setup/images/ranks images/.
cp  -rp ../aoo-setup/images/smilies images/.

cd ..

# create AOO forum deployment
echo com${1}
rm -rf com${1}
cp -rp ref${1} com${1}
cd  com${1}

# patch
patch -p1 < ../aoo-changes.patch
# keep the config.php already in each deployment directory
rm config.php
