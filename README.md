Es una prueba para GitHub

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (master)
$ git pull collection master
Warning: Permanently added the RSA host key for IP address '192.30.253.112' to the list of known hosts.
Enter passphrase for key '/c/Users/Jonathan/.ssh/id_rsa':
remote: Counting objects: 4, done.
remote: Compressing objects: 100% (4/4), done.
remote: Total 4 (delta 2), reused 0 (delta 0), pack-reused 0
Unpacking objects: 100% (4/4), done.
From github.com:Jonathang-Espinoza/mycollection
 * branch            master     -> FETCH_HEAD
   72b3dae..ffa80ea  master     -> collection/master
Merge made by the 'recursive' strategy.

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (master)
$ git push -u collection master
Enter passphrase for key '/c/Users/Jonathan/.ssh/id_rsa':
Counting objects: 3, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 400 bytes | 0 bytes/s, done.
Total 3 (delta 2), reused 0 (delta 0)
To git@github.com:Jonathang-Espinoza/mycollection.git
   ffa80ea..9216daf  master -> master
Branch master set up to track remote branch master from collection.

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (master)
$ git status
On branch master
Your branch is up-to-date with 'collection/master'.
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        myCollection.rar
        page server.rar

nothing added to commit but untracked files present (use "git add" to track)

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (master)
$ git branch test
fatal: A branch named 'test' already exists.

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (master)
$ git checkout test
Switched to branch 'test'

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git status
On branch test
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        myCollection.rar
        page server.rar

nothing added to commit but untracked files present (use "git add" to track)

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git push -u collection test
Enter passphrase for key '/c/Users/Jonathan/.ssh/id_rsa':
fatal: test cannot be resolved to branch.

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git branch
  Test
  master

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git checkout test
Already on 'test'

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git status
On branch test
Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

        modified:   index2.php

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        myCollection.rar
        page server.rar

no changes added to commit (use "git add" and/or "git commit -a")

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git add index2.php

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git commit -m 'Se modifico el index 2'
[test c3c5932] Se modifico el index 2
 1 file changed, 1 insertion(+), 1 deletion(-)

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git status
On branch test
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        myCollection.rar
        page server.rar

nothing added to commit but untracked files present (use "git add" to track)

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git push collection test
Enter passphrase for key '/c/Users/Jonathan/.ssh/id_rsa':
Counting objects: 3, done.
Delta compression using up to 8 threads.
Compressing objects: 100% (3/3), done.
Writing objects: 100% (3/3), 314 bytes | 0 bytes/s, done.
Total 3 (delta 2), reused 0 (delta 0)
To git@github.com:Jonathang-Espinoza/mycollection.git
 * [new branch]      test -> test

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$ git status
On branch test
Untracked files:
  (use "git add <file>..." to include in what will be committed)

        README.md.txt
        myCollection.rar
        page server.rar

nothing added to commit but untracked files present (use "git add" to track)

Jonathan@Jonathan MINGW64 /c/xampp/htdocs/myCollection (test)
$