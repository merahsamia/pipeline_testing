pipeline {
    agent any

    stages {

         stage('Checkout') {
            steps {
               git branch: "main",url : "https://github.com/merahsamia/pipeline_testing.git"

            }
        }

         stage('Build') {
            steps {
                bat "php index.php"
            }
        }
        stage('Test') {
            steps {
                bat "php test.php"
                echo "just trying"
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
       
    }
}
