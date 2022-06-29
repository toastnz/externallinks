# External links (including Blocks HTMLText fields)

## Introduction

The external links module is a task and ModelAdmin to track and to report on broken external links.
This module can also check the blocks HTMLText fields.

It's based on Silverstripe External Links, but including the Blocks HTMLText fiedls.

https://github.com/silverstripe/silverstripe-externallinks

## Requirements

* SilverStripe ^4.0
* Silverstripe External Links (silverstripe/externallinks)

## Features

* Add external links to broken links reports
* Add a task to track external broken links
* Add HTMLText fields inside blocks external broken links to broken links reports

## Installation

1. Require the module via composer: `composer require toastnz/externallinks`
2. Run `/dev/build` in your browser to rebuild the database.
3. Run the following task *http://path.to.silverstripe/dev/tasks/CheckExternalLinksWithBlocksTask* to check for
   broken external links(including blocks html text fields)

## Generate report

Run the following task *http://path.to.silverstripe/dev/tasks/CheckExternalLinksTask* to check your site for external
broken links each time to generate the report.

## Queued job

This function is under development, please use dev task only.
