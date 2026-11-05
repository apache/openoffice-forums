echo "backup /x1/var_www/${1} in /x1/var_lib_phpBB/backup/${1}"

if [[ ! -d "/x1/var_www/${1}" ]]; then
    echo "Error: Required directory does not exist"
    exit 1
fi

rm -rf backup/${1}

cp -rp /x1/var_www/${1} backup/.
