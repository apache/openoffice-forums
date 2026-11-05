Here is the process and scripts being used to upgrade from 3.3.7 to 3.3.19 which should work for further updates to 3.3.x

The preparation scripts are run after:

```bash
sudo su -
su phpbb
cd /x1/var_lib_phpBB
```

Change the version numbers as necessary. Make sure from phpbb.com that there are no unusual tasks to migrate to this version.

## Initial setup

- Setup the standard OpenOffice images and static languages directory that every forum gets.

  ```bash
  bash aoo-setup.sh
  ```

  The `aoo-setup` directory is created from various sources especially the 3.3.7 installation.

## Preparing a release

- Handle updated langauge packages. Perform these steps for each that has an update.

  1. Download the archive and save it in the directory.

  2. Expand the archive.

     ```bash
     unzip dutch_casual_honorifics_2_3_10.zip
     ```

  3. Edit `aoo-assemble.sh` bash scripts to copy from the updated language package version.

- Download the phpBB-3.3.19.zip and transfer to this directory.

- Assemble the new installation directories for the OpenOffice forums.

  ```bash
  bash aoo-assemble.sh 3.3.19
  ```

  Two directories are created.

  1. `ref3.3.19` - the release with our languages and images included
  2. `com3.3.19` - The `ref` with the `aoo-changes.patch` applied.

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
