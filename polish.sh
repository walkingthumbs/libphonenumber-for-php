#!/bin/bash

set -e

REPO_ROOT=$( cd "$( dirname "${BASH_SOURCE[0]}")" && pwd);

find $REPO_ROOT -name '*.php' -print0 | xargs -0 sed -i -e 's/\s\+$//'
