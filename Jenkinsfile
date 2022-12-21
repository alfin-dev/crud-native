pipeline {
    agent any
    stages {
        stage ('Build') {
            steps {
                echo 'Hello Build'
            }
        }

        stage ('Test') {
            steps {
                echo 'Hello Test'
            }
        }

        stage ('Error') {
            steps {
                echo 'Hello Error'
                sh ('Error')
            }
        }

        stage ('Deploy') {
            steps {
                echo 'Hello Deploy'
            }
        }
    }
    post {
        always {
            echo "Success gais apapun yang terjadi"
        }
        success {
            echo "Ihiiyy Success"
        }
        failure {
            echo "Gagal"
        }
        cleanup {
            echo "Cleanup"
        }
    }
}