Here is the process and scripts being used to upgrade from 3.3.7 to 3.3.19 which should work for further updates to 3.3.x

## Initial setup

  The `aoo-setup` directory was created from various sources especially the 3.3.7 installation.

  It contains our standard set of images plus some languages which either are not frequently updated or are no longer offered.

## Preparing to install a release

Change the version numbers as necessary. Make sure from phpbb.com that there are no unusual tasks to migrate to the new version.

- Download the new version of phpBB into the directory.

- Prepare updated language packages. Perform these steps for each that has an update.

  1. Download the archive and save it in the directory.

  2. Expand the archive.

     ```bash
     unzip dutch_casual_honorifics_2_3_10.zip
     ```

  3. Edit `aoo-assemble.sh` bash scripts to copy from the updated language package version.

- Assemble the new installation directories for the OpenOffice forums.

  ```bash
  bash aoo-assemble.sh 3.3.19
  ```

  Two directories are created.

  1. `ref3.3.19` - the release with our languages and images included. This is a local
     working copy only. It is rebuilt from the downloads on every run and is not
     committed (see `.gitignore`).
  2. `com3.3.19` - The `ref` with the `aoo-changes.patch` applied. This is what is
     committed and installed.

  The script also removes files that should not be deployed or committed:

  - `config.php` and the `files` directory - each forum keeps its own.
  - `ext/phpbb/viglink/composer.lock` - an unused development lock file which only
    triggers GitHub dependabot alerts.

- Review the result. If `patch` reports failed hunks, or our changes need to be revised,
  edit the files in `com3.3.19` and recreate the patch as described below.

- Update the GitHub repository. Commit `com3.3.19`, the patch, the scripts and the
  downloads. Do not commit `ref3.3.19`.

  1. `git add` or equivalent.
  2. `git commit` or equivalent.
  3. `git push` or equivalent.

## Recreating the patch

`aoo-changes.patch` holds our changes to phpBB. To change them, edit the files in
`com3.3.19` and then recreate the patch from the two directories:

```bash
diff -ruN -U10 --exclude='*.gif' --exclude='*.png' --exclude='*.jpg' --exclude='*.jpeg' --exclude='*.ico' --exclude='*.pdf' ref3.3.19 com3.3.19 > aoo-changes.patch
```

If `ref3.3.19` is not present, run `aoo-assemble.sh` first. It rebuilds both directories,
so save edited files from `com3.3.19` elsewhere before running it.

## Dependabot alerts

GitHub dependabot reports vulnerabilities from `com3.3.19/composer.lock`. These libraries
are the ones bundled with the phpBB release and are pinned by phpBB to old major versions
(Symfony 3.4, Twig 2, Guzzle 6), so the alerts cannot be fixed by updating a library on
its own. Review new alerts for whether phpBB actually uses the affected code, dismiss
those that do not apply, and leave the rest open until a phpBB release resolves them.

## Backup

Backup the phpBB forums

```
bash aoo-backup.sh en
bash aoo-backup.sh es
bash aoo-backup.sh fr
bash aoo-backup.sh hu
bash aoo-backup.sh it
bash aoo-backup.sh ja
bash aoo-backup.sh nl
bash aoo-backup.sh pl
bash aoo-backup.sh vi
```

MySQL backups happen twice daily and can be found in `/x1/db_dump/`.

## Installation

As `root`:

```bash
cd /x1/var_www
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 en
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 es
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 fr
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 hu
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 it
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 ja
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 nl
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 pl
bash /x1/var_lib_phpBB/aoo-install.sh 3.3.19 vi
```
