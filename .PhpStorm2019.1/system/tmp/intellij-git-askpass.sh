#!/bin/sh
"/snap/phpstorm/98/jre64/bin/java" -cp "/snap/phpstorm/98/plugins/git4idea/lib/git4idea-rt.jar:/snap/phpstorm/98/lib/xmlrpc-2.0.1.jar:/snap/phpstorm/98/lib/commons-codec-1.10.jar:/snap/phpstorm/98/lib/util.jar" org.jetbrains.git4idea.http.GitAskPassApp "$@"
