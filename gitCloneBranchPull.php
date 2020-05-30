//Download Repository

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master
$ git clone https://github.com/Selim-Reza-Swadhin/PHPbeginer.git

//Downloading

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master
$ git clone https://github.com/Selim-Reza-Swadhin/PHPbeginer.git
Cloning into 'PHPbeginer'...
remote: Enumerating objects: 3, done.
remote: Counting objects: 100% (3/3), done.
remote: Compressing objects: 100% (2/2), done.
remote: Total 3 (delta 0), reused 3 (delta 0), pack-reused 0
Receiving objects: 100% (3/3), done.

//Download completed

//Change directory

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master
$ cd PHPbeginer

//Current directory
Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ pwd
/c/Users/Selim Reza Swadhin/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

nothing to commit, working tree clean

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git status
On branch master
Your branch is up to date with 'origin/master'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   learningPhp.php

Untracked files:
  (use "git add <file>..." to include in what will be committed)
        author.txt

no changes added to commit (use "git add" and/or "git commit -a")

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git add .

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git commit -m "one file add"
[master cd7b117] one file add
 2 files changed, 2 insertions(+), 1 deletion(-)
 create mode 100644 author.txt

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git status
On branch master
Your branch is ahead of 'origin/master' by 1 commit.
  (use "git push" to publish your local commits)

nothing to commit, working tree clean

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ gt log
bash: gt: command not found

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git log
commit cd7b117d49292584e7d40db88b31581700266164 (HEAD -> master)
Author: selim reza swadhin <selimrezaswadhim@gmail.com>
Date:   Sat May 30 23:15:54 2020 +0600

    one file add

commit d8a433c2a3a2e115e7df896444859a6a22a05943 (origin/master, origin/HEAD)
Author: unknown <you@example.com>
Date:   Sat May 30 22:54:00 2020 +0600

    Learning Tutorial

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git config --list
diff.astextplain.textconv=astextplain
filter.lfs.clean=git-lfs clean -- %f
filter.lfs.smudge=git-lfs smudge -- %f
filter.lfs.process=git-lfs filter-process
filter.lfs.required=true
http.sslbackend=openssl
http.sslcainfo=C:/Program Files/Git/mingw64/ssl/certs/ca-bundle.crt
core.autocrlf=true
core.fscache=true
core.symlinks=false
credential.helper=manager
gui.recentrepo=C:/Users/Selim Reza Swadhin/Desktop/New folder
gui.recentrepo=E:/Gittutorial
user.email=selimrezaswadhim@gmail.com
user.name=selim reza swadhin
core.repositoryformatversion=0
core.filemode=false
core.bare=false
core.logallrefupdates=true
core.symlinks=false
core.ignorecase=true
remote.origin.url=https://github.com/Selim-Reza-Swadhin/PHPbeginer.git
remote.origin.fetch=+refs/heads/*:refs/remotes/origin/*
:

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git remote add origin https://github.com/Selim-Reza-Swadhin/PHPbeginer.git
fatal: remote origin already exists.

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git remote show
origin

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git remote origin show
error: Unknown subcommand: origin
usage: git remote [-v | --verbose]
   or: git remote add [-t <branch>] [-m <master>] [-f] [--tags | --no-tags] [--mirror=<fetch|push>] <name> <url>
   or: git remote rename <old> <new>
   or: git remote remove <name>
   or: git remote set-head <name> (-a | --auto | -d | --delete | <branch>)
   or: git remote [-v | --verbose] show [-n] <name>
   or: git remote prune [-n | --dry-run] <name>
   or: git remote [-v | --verbose] update [-p | --prune] [(<group> | <remote>)...]
   or: git remote set-branches [--add] <name> <branch>...
   or: git remote get-url [--push] [--all] <name>
   or: git remote set-url [--push] <name> <newurl> [<oldurl>]
   or: git remote set-url --add <name> <newurl>
   or: git remote set-url --delete <name> <url>

    -v, --verbose         be verbose; must be placed before a subcommand


Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git push origin master
fatal: TaskCanceledException encountered.
   A task was canceled.
Enumerating objects: 6, done.
Counting objects: 100% (6/6), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (4/4), 380 bytes | 190.00 KiB/s, done.
Total 4 (delta 1), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To https://github.com/Selim-Reza-Swadhin/PHPbeginer.git
   d8a433c..cd7b117  master -> master

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git pull origin master
From https://github.com/Selim-Reza-Swadhin/PHPbeginer
 * branch            master     -> FETCH_HEAD
Already up to date.

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git branch selim

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git log
commit cd7b117d49292584e7d40db88b31581700266164 (HEAD -> master, origin/master, origin/HEAD, selim)
Author: selim reza swadhin <selimrezaswadhim@gmail.com>
Date:   Sat May 30 23:15:54 2020 +0600

    one file add

commit d8a433c2a3a2e115e7df896444859a6a22a05943
Author: unknown <you@example.com>
Date:   Sat May 30 22:54:00 2020 +0600

    Learning Tutorial

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (master)
$ git checkout selim
Switched to branch 'selim'

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (selim)
$ touch reza.txt

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (selim)
$ git status
On branch selim
Untracked files:
  (use "git add <file>..." to include in what will be committed)
        reza.php

nothing added to commit but untracked files present (use "git add" to track)

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (selim)
$ git add .

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (selim)
$ git commit -m"add opp file"
[selim 3feb5d0] add opp file
 1 file changed, 85 insertions(+)
 create mode 100644 reza.php

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (selim)
$ git push origin selim
fatal: TaskCanceledException encountered.
   A task was canceled.
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 868 bytes | 868.00 KiB/s, done.
Total 3 (delta 0), reused 0 (delta 0), pack-reused 0
remote:
remote: Create a pull request for 'selim' on GitHub by visiting:
remote:      https://github.com/Selim-Reza-Swadhin/PHPbeginer/pull/new/selim
remote:
To https://github.com/Selim-Reza-Swadhin/PHPbeginer.git
 * [new branch]      selim -> selim

Selim Reza Swadhin@DESKTOP-FTHJTF5 MINGW64 ~/Downloads/PHPbeginer-master/PHPbeginer-master/PHPbeginer (selim)
$
