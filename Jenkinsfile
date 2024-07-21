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
               //Simulation du déploiement
                        script {
                            def deployDir = "C:\\Users\\Sam\\Desktop\\Pipeline-jenkins\\deployDir"
                            //bat "mkdir ${deployDir}"
                            bat "copy index.php ${deployDir}\\"
                            echo "Déploiement réussi dans ${deployDir}"
                        }
            }
        }
   }

  post {
        always {
            echo 'This runs always'
        }
        success {
            echo 'This runs on success.'
        }
        failure {
            echo 'This runs on failure.'
        }
    }
}
