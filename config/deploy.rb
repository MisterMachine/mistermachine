default_run_options[:pty] = true  # Must be set for the password prompt from git to work

set :domain, "mistermachineshop.com"
set :user, "root"
set :repo_user, "menslow"
set :repo_name, "mistermachine"
set :application, "mistermachine"
set :repository, "git@github.com:#{repo_user}/#{repo_name}.git"  # Your clone URL
set :branch, "master"
set :scm, :git

# Tell Capistrano to use agent forwarding with this command. uses your local keys instead of keys installed on the server.
ssh_options[:forward_agent] = true

# Deploy settings
set :deploy_to, "/var/www/#{application}"

# Fetch only the changes since the last.
set :deploy_via, :remote_cache

# Exclude the following files
set :copy_exclude, [".git", ".DS_Store", ".gitignore", ".gitmodules"]
 
set :copy_exclude, [".git/*", ".gitignore"]
set :copy_compression, :gzip
 
# Options
set :use_sudo, false
set :keep_releases, 5
 
# Roles & servers
role :app, "#{domain}"
 
server "#{domain}", :app, :primary => true
 
# Environments
task :production do
	set :deploy_to, "/var/www/#{application}"
end
 
# Deployment tasks
namespace :deploy do
  desc "Override the original :restart"

  task :finalize_update, :roles => :app do
 
    # add any additional deploy tasks here.
 
  end
 
end